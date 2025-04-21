{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Hospitals" icon="la la-hospital" :link="backpack_url('hospitals')" />
{{--<x-backpack::menu-item :title="trans('backpack::crud.file_manager')" icon="la la-files-o" :link="backpack_url('elfinder')" />--}}
<x-backpack::menu-item title="Doctors" icon="la la-user-nurse" :link="backpack_url('doctors')" />
<x-backpack::menu-item title="Services" icon="la la-bars" :link="backpack_url('services')" />
<x-backpack::menu-item title="Departments" icon="la la-building" :link="backpack_url('departments')" />

<x-backpack::menu-dropdown title="Site settings" icon="la la-list">
    <x-backpack::menu-dropdown-item title='Pages' icon='la la-file-o' :link="backpack_url('page')" />
    <x-backpack::menu-dropdown-item title='Menu' icon='la la-list' :link="backpack_url('menu-item')" />
    <x-backpack::menu-dropdown-item title="Settings" icon="la la-cogs" :link="backpack_url('settings/1/edit')" />
    <x-backpack::menu-dropdown-item title="Faqs" icon="la la-question-circle" :link="backpack_url('faqs')" />
    <x-backpack::menu-dropdown-item title="Testimonials" icon="la la-user-circle" :link="backpack_url('testimonials')" />
    <x-backpack::menu-dropdown-item title="Sliders" icon="la la-images" :link="backpack_url('sliders')" />
    <x-backpack::menu-dropdown-item title="Features" icon="la la-list-ul" :link="backpack_url('features/1/edit')" />
    <x-backpack::menu-dropdown-item title="Translation Manager" icon="la la-stream" :link="backpack_url('translation-manager')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-item title="Contact requests" icon="la la-list-ul" :link="backpack_url('contact-requests')" />

<x-backpack::menu-item title="Sub services" icon="la la-question" :link="backpack_url('sub-services')" />