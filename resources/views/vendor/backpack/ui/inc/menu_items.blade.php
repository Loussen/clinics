{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title='Pages' icon='la la-file-o' :link="backpack_url('page')" />
<x-backpack::menu-item title='Menu' icon='la la-list' :link="backpack_url('menu-item')" />
<x-backpack::menu-item title="Hospitals" icon="la la-hospital" :link="backpack_url('hospitals')" />
{{--<x-backpack::menu-item :title="trans('backpack::crud.file_manager')" icon="la la-files-o" :link="backpack_url('elfinder')" />--}}
<x-backpack::menu-item title="Doctors" icon="la la-user-nurse" :link="backpack_url('doctors')" />
<x-backpack::menu-item title="Services" icon="la la-bars" :link="backpack_url('services')" />
<x-backpack::menu-item title="Faqs" icon="la la-question-circle" :link="backpack_url('faqs')" />
<x-backpack::menu-item title="Testimonials" icon="la la-user-circle" :link="backpack_url('testimonials')" />
<x-backpack::menu-item title="Settings" icon="la la-cogs" :link="backpack_url('settings/1/edit')" />

<x-backpack::menu-item title="Translation Manager" icon="la la-stream" :link="backpack_url('translation-manager')" />

<x-backpack::menu-item title="Sliders" icon="la la-question" :link="backpack_url('sliders')" />
<x-backpack::menu-item title="Features" icon="la la-question" :link="backpack_url('features/1/edit')" />

<x-backpack::menu-item title="Departments" icon="la la-question" :link="backpack_url('departments')" />