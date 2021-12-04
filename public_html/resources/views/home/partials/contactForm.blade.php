<form method="POST" action="{{ route('contact-form.store') }}">
    @csrf
    <div class="row vertical-gap sm-gap">
        <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="nk-gap"></div>
    <textarea name="msg" rows="3" class="form-control">{{ old('msg') }}</textarea>
    @if ($errors->has('msg'))
        <span class="text-danger">{{ $errors->first('msg') }}</span>
    @endif
    <div class="nk-gap-2"></div>
    <p><div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div></p>
    <button class="nk-btn nk-btn-rounded nk-btn-color-white" type="submit" name="submit"
    id="send-message">
        <span>Send</span>
        <span class="icon"><i class="ion-paper-airplane"></i></span>
    </button>
    <div class="nk-form-response-success"></div>
    <div class="nk-form-response-error"></div>
</form>
