<div class="pos-tab-content">
    <div class="row">

        <div class="col-xs-12">
            <h4 class="customer-profile-group-heading">WhatsApp Settings (Green API)</h4>
            <hr>
        </div>

        {{-- Instance ID --}}
        <div class="col-xs-12">
            <div class="form-group">
                {!! Form::label('whatsapp_instance_id', 'Green API Instance ID:' ) !!}
                {!! Form::text('whatsapp_settings[instance_id]', 
                    !empty($whatsapp_settings['instance_id']) ? $whatsapp_settings['instance_id'] : '', 
                    ['class' => 'form-control', 'placeholder' => 'Enter Instance ID', 'id' => 'whatsapp_instance_id']
                ) !!}
            </div>
        </div>

        {{-- API Token --}}
        <div class="col-xs-12">
            <div class="form-group">
                {!! Form::label('whatsapp_api_token', 'Green API Token:' ) !!}
                {!! Form::text('whatsapp_settings[api_token]', 
                    !empty($whatsapp_settings['api_token']) ? $whatsapp_settings['api_token'] : '', 
                    ['class' => 'form-control', 'placeholder' => 'Enter API Token', 'id' => 'whatsapp_api_token']
                ) !!}
            </div>
        </div>

        <div class="clearfix"></div>

        {{-- Test Button --}}
        <div class="col-xs-12">
            <button type="button" class="tw-dw-btn tw-dw-btn-success tw-text-white pull-right" id="test_whatsapp_btn">
                Test WhatsApp Configuration
            </button>
        </div>

    </div>
</div>
