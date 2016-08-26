<ul class="treeview-menu">
    @foreach ($childs as $child)
        @permission($child->name)
        @if ($child->child->isEmpty())
            <li class="{{ $currentMenuNames->contains($child->name) ? 'active' : '' }}">
                <a href="{{ $child->uri == '#' ? '#' : route($child->name) }}">
                    <i class="fa  {{ $child->icon ?: 'fa-circle-o' }}"></i>
                    {{ $child->title }}
                </a>
            </li>
        @else
            <li class="{{ $currentMenuNames->contains($child->name) ? 'active' : '' }}">
                <a href="{{ $child->uri == '#' ? '#' : route($child->name) }}">
                    <i class="fa {{ $child->icon ?: 'fa-circle-o' }}"></i>
                    {{ $child->title }}
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                @include('admin::layouts.partials.leftmenuchild', ['childs' => $child->child])
            </li>
        @endif
        @endpermission
    @endforeach
</ul>