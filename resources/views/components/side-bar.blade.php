<div class="mt-4 sidebar-categories">
    <div class="subcategories-side">
        rgergerg
    </div>
    <div class="categories-header p-2 d-flex align-items-center  font-weight-bold">
        <i class="bi bi-list mr-2 text-primary" style="font-size: 20px"></i>Categories
    </div>
    <ul class="list-group">
        @foreach ($categories as $item)
            <li class="list-group-item category">
                <div class="text-center d-flex align-items-center fs-5 justify-content-between">
                    <div>
                        <img  src="{{ asset('img/cat.png') }}">
                        <a href='#' class="ml-2" style="color: black">{{ $item->name }}</a>
                    </div>
                    <i class="bi bi-caret-down-fill ms-auto"></i>
                </div>
                
                <ul class="my-2 subcats" style="list-style-type: none">
                    <hr>
                    @foreach ($item->children as $subcat)
                       <li>
                            <a href=""  style="color: black">{{ $subcat->name }}</a>
                       </li>
                       <hr>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

</div>