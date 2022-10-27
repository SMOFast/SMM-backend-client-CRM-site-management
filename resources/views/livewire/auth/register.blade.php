<form wire:submit.prevent="register">
    <button class="btn btn-grey w-100">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_109_862)">
                <path
                    d="M5.31891 14.5035L4.4835 17.6222L1.43011 17.6868C0.517594 15.9943 0 14.0578 0 12C0 10.0101 0.483938 8.13362 1.34175 6.48132H1.34241L4.06078 6.9797L5.25159 9.68176C5.00236 10.4084 4.86652 11.1884 4.86652 12C4.86661 12.8809 5.02617 13.7249 5.31891 14.5035Z"
                    fill="#FBBB00"/>
                <path
                    d="M23.7902 9.75824C23.928 10.4841 23.9999 11.2338 23.9999 12C23.9999 12.8591 23.9095 13.6971 23.7375 14.5055C23.1533 17.2563 21.6269 19.6582 19.5124 21.358L19.5118 21.3574L16.0878 21.1827L15.6032 18.1576C17.0063 17.3347 18.1028 16.047 18.6804 14.5055H12.2637V9.75824H18.774H23.7902Z"
                    fill="#518EF8"/>
                <path
                    d="M19.5114 21.3574L19.5121 21.358C17.4556 23.011 14.8433 24 11.9996 24C7.42969 24 3.45652 21.4457 1.42969 17.6868L5.31848 14.5035C6.33187 17.2081 8.94089 19.1334 11.9996 19.1334C13.3143 19.1334 14.546 18.778 15.6029 18.1576L19.5114 21.3574Z"
                    fill="#28B446"/>
                <path
                    d="M19.6596 2.76262L15.7721 5.94525C14.6783 5.26153 13.3853 4.86656 12 4.86656C8.87213 4.86656 6.21431 6.88017 5.25169 9.68175L1.34245 6.48131H1.3418C3.33895 2.63077 7.36223 0 12 0C14.9117 0 17.5814 1.03716 19.6596 2.76262Z"
                    fill="#F14336"/>
            </g>
            <defs>
                <clipPath id="clip0_109_862">
                    <rect width="24" height="24" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <span class="ms-2">Register with google</span>
    </button>
    <div class="py-4 text-center">
        <hr>
        <span class="line-text">or</span>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-at"></i></span>
            <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif" value="" placeholder="Email" wire:model="email">
        </div>
        @error('email')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-unlock-keyhole"></i></span>
            <input class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Password" wire:model="password" type="password">
        </div>
        @error('password')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-unlock-keyhole"></i></span>
            <input class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" placeholder="Password" wire:model="password_confirmation" type="password">
        </div>
        @error('password_confirmation')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button class="btn btn-lg btn-primary mt-5 w-100">Sign up</button>
</form>
