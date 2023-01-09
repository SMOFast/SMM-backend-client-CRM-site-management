<div class="col-md-10 col-lg-8 mx-auto">
    <nav class="mb-4 mb-sm-5 py-4 border-bottom d-flex align-items-center text-center">
        <a href="{{ route('tickets') }}" class="nav-link flex-fill flex-md-grow-0 fw-medium me-auto"><i class="fa-regular fa-angle-left me-2"></i>Tickets</a>
        <a href="{{ route('orders') }}" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-md-5"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
        <a href="{{ route('faq') }}" class="nav-link flex-fill flex-md-grow-0 fw-medium"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
    </nav>
    <h1 class="h3 mb-4 mb-sm-5">Create support request</h1>
    <div class="card shadow-m">
        <form action="">
            <div class="mb-3">
                <label for="question" class="mb-2">Relates to</label>
                <input type="text" class="form-control" placeholder="Your question in short" id="question">
            </div>
            <div class="mb-3">
                <label for="relates" class="mb-2">Relates to</label>
                <select class="form-select form-control" id="relates">
                    <option selected="">— Empty selection —</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="priority" class="mb-2">Priority</label>
                <select class="form-select form-control" id="priority">
                    <option selected="">Non-urgent (24 hours)</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                    <option value="">Item</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="" id="" class="form-control" cols="30" rows="4" placeholder="Message"></textarea>
            </div>
            <div class="d-block d-sm-flex align-items-center mt-4">
                <div class="me-auto">
                    <label for="formFile" class="btn btn-grey w-100"><i class="fa-regular fa-paperclip me-2"></i>Attach files</label>
                    <input class="form-control d-none" type="file" id="formFile">
                </div>
                <div class="mt-3 mt-sm-0">
                    <button class="btn btn-primary w-100">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
