<div class="row mx-2 mb-4">
    <div class="col-md-2">
        <div class="me-3">
            <div>
                <label>
                    <select wire:model='column' class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
            
            <div class="mx-2">
               <input type="search" class="form-control" placeholder="Search.." wire:model='search'/>              
            </div>            
            
            {{ $slot }}                          
            
        </div>
    </div>
</div>