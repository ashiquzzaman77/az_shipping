{{-- <x-mail::message>
    
    @if (!empty($greeting))
        # {{ $greeting }}
    @else
        @if ($level === 'error')
            # @lang('Whoops!')
        @else
            # @lang('Hello User!')
        @endif
    @endif

    
    @foreach ($introLines as $line)
        {{ $line }}
    @endforeach

    
    @isset($actionText)
        <?php
        $color = match ($level) {
            'success', 'error' => $level,
            default => 'primary',
        };
        ?>
        <x-mail::button :url="$actionUrl" :color="$color">
            {{ $actionText }}
        </x-mail::button>
    @endisset

    
    @foreach ($outroLines as $line)
        {{ $line }}
    @endforeach

    
    @if (!empty($salutation))
        {{ $salutation }}
    @else
        @lang('Regards'),<br>
       
    @endif

    
    @isset($actionText)
        <x-slot:subcopy>
            @lang("If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n" . 'into your web browser:', [
                'actionText' => $actionText,
            ]) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
        </x-slot:subcopy>
    @endisset
</x-mail::message> --}}

<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }
</style>

<div
    style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
            <tr>
                <td align="center" valign="center" style="text-align:center; padding: 40px">
                    <a href="http://azshipping.net/" rel="noopener" target="_blank">

                        <img alt="Logo"
                            src=""
                            style="width: 100px;" />

                    </a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <div
                        style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Hello!</strong>
                        </div>
                        <div style="padding-bottom: 30px">You are receiving this email because we received a password
                            reset request for your account. To proceed with the password reset please click on the
                            button below:</div>
                        <div style="padding-bottom: 40px; text-align:center;">
                            <a href="{{ $actionUrl }}" rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">Reset Password</a>
                        </div>
                        <div style="padding-bottom: 30px">This password reset link will expire in 60
                            minutes. If you did
                            not request a password reset, no further action is required.</div>
                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                        <div style="padding-bottom: 50px; word-wrap: break-all;">
                            <p style="margin-bottom: 10px;">Button not working? Try pasting this URL into your browser:
                            </p>
                            <a href="{{ $actionUrl }}" rel="noopener" target="_blank"
                                style="text-decoration:none;color: #009EF7">{{ $actionUrl }}</a>
                        </div>
                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">Best Regards<br>AZ Shipping Services Team.</div>
                        
            </tr>
            <tr>
                <td align="center" valign="center"
                    style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                    {{-- <p>Floor 5, 450 Avenue of the Red Field, SF, 10050, USA.</p> --}}
                    <p>Copyright ©
                        <a href="http://azshipping.net/" rel="noopener" target="_blank">AZ Shipping Services</a>.
                    </p>
                </td>
            </tr></br>
</div>
