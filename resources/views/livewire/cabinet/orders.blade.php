<div class="container">

    @include('includes.cabinet_menu')

    <div class="d-block d-md-flex align-items-center mb-5">
        <h1 class="h3 mb-0 me-0 me-sm-auto">Orders History</h1>
        <div class="d-flex align-items-center mt-4 mt-md-0">
            <form action="" class="flex-fill">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search">
                    <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                </div>
            </form>
            <button class="btn btn-collapse" data-bs-toggle="collapse" data-bs-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                <i class="fa-regular fa-filter-list fs-24"></i>
            </button>
        </div>
    </div>
    <div class="card p-2 p-md-4 collapse mb-4" id="collapseFilters">
        <form action="" class="d-block d-sm-flex">
            <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                <span class="input-group-text"><i class="fa-regular fa-photo-film-music"></i></span>
                <select class="form-select form-control">
                    <option selected="">All Social Media</option>
                    <option value="">Instagram</option>
                    <option value="">TikTok</option>
                    <option value="">Youtube</option>
                    <option value="">Twitch</option>
                </select>
            </div>
            <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                <span class="input-group-text"><i class="fa-regular fa-check-to-slot"></i></span>
                <select class="form-select form-control">
                    <option selected="">Status</option>
                    <option value="">Performed</option>
                    <option value="">Processing</option>
                    <option value="">Error</option>
                </select>
            </div>
            <button class="btn btn-primary">Apply</button>
        </form>
    </div>
    <div class="card shadow-m p-0 overflow-hidden">
        <table class="u-table">
            <thead>
            <tr>
                <th scope="col">Products</th>
                <th scope="col">Date</th>
                <th scope="col">Payment</th>
                <th scope="col">Quantity</th>
                <th scope="col">Order ID</th>
                <th scope="col" class="text-center">Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>

                        <th scope="row">
                            <div class="d-flex align-items-center">
                                <div class="icon-32 bg-soft-yellow rounded me-3">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <span>{{$order['products'][0]['name']}}</span>
                            </div>
                        </th>
                        <td>{{$order['createdAt']}}</td>
                        <td>${{$order['amount']}} USD</td>
                        <td>{{$order['products'][0]['order_count'] * $order['products'][0]['multiplicity']}} {{$order['products'][0]['attributes']['multiplicity_description']['value']}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="text-truncate" style="max-width: 100px">{{$order['id']}}</div>
                                <button type="button" class="btn-clipboard" data-clipboard-text="{{$order['id']}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy Order ID"><i class="fa-regular fa-copy color-grey-600 ms-2"></i></button>
                            </div>
                        </td>
                        <td>
                            <div class="px-3 py-2 bg-soft-yellow rounded fw-medium text-center">Processing</div>
                        </td>
                    </tr>

                @endforeach

                <!--
                <div class="px-3 py-2 bg-soft-green rounded fw-medium text-center">Performed</div>
                <div class="px-3 py-2 bg-soft-red rounded fw-medium text-center">Error</div>
                <div class="px-3 py-2 bg-soft-yellow rounded fw-medium text-center">Processing</div>
                -->


            </tbody>
        </table>
    </div>
    <div class="my-5 text-center">
        <button class="btn btn-lg btn-grey border w-100" style="max-width: 324px;">Load more</button>
    </div>
</div>
