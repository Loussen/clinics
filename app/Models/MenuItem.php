<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use CrudTrait;
    use HasTranslations;

    protected $table = 'menu_items';
    protected $fillable = ['name', 'type', 'link', 'page_id', 'parent_id','extras'];

    public $translatable = ['name','extras'];

    public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }

    public function page()
    {
        return $this->belongsTo('App\Models\Page', 'page_id');
    }

    /**
     * Get all menu items, in a hierarchical collection.
     * Only supports 2 levels of indentation.
     */
    public static function getTree()
    {
        $menu = self::orderBy('lft')->get();

        if ($menu->count()) {
            foreach ($menu as $k => $menu_item) {
                $menu_item->children = collect([]);

                foreach ($menu as $i => $menu_subitem) {
                    if ($menu_subitem->parent_id == $menu_item->id) {
                        $menu_item->children->push($menu_subitem);

                        // remove the subitem for the first level
                        $menu = $menu->reject(function ($item) use ($menu_subitem) {
                            return $item->id == $menu_subitem->id;
                        });
                    }
                }
            }
        }

        return $menu;
    }

    public function url()
    {
        switch ($this->type) {
            case 'external_link':
                return $this->link;

            case 'internal_link':
                return is_null($this->link) ? '#' : url($this->link);

            default: //page_link
                if ($this->page) {
                    return url($this->page->slug);
                }
                break;
        }
    }
}
