<div class="pos-tab-content">
      <div class="row">

            <div class="col-xs-12">
                  <h4 class="customer-profile-group-heading">
                        MRA e-Invoicing Settings (Mauritius Revenue Authority)
                  </h4>
                  <hr>
            </div>

            {{-- Environment --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_environment', 'Environment:') !!}
                        {!! Form::select(
                        'mra_settings[environment]',
                        ['sandbox' => 'Sandbox', 'live' => 'Production (Live)'],
                        $mra_settings['environment'] ?? 'sandbox',
                        ['class' => 'form-control', 'id' => 'mra_environment']
                        ) !!}
                  </div>
            </div>

            {{-- EBS MRA ID --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_ebs_id', 'EBS MRA ID:') !!}
                        {!! Form::text(
                        'mra_settings[ebsMraId]',
                        $mra_settings['ebsMraId'] ?? '',
                        ['class' => 'form-control', 'placeholder' => 'Enter EBS MRA ID']
                        ) !!}
                  </div>
            </div>

            {{-- Username --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_username', 'Username:') !!}
                        {!! Form::text(
                        'mra_settings[mra_username]',
                        $mra_settings['mra_username'] ?? '',
                        ['class' => 'form-control', 'placeholder' => 'Enter Username']
                        ) !!}
                  </div>
            </div>
            {{-- Password --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_password', 'Password:') !!}
                        {!! Form::text(
                        'mra_settings[mra_password]',
                        $mra_settings['mra_password'] ?? '',
                        ['class' => 'form-control', 'placeholder' => 'Enter Password']
                        ) !!}
                  </div>
            </div>

            {{-- Area Code --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_area_code', 'Area Code:') !!}
                        {!! Form::text(
                        'mra_settings[areaCode]',
                        $mra_settings['areaCode'] ?? '305',
                        ['class' => 'form-control', 'placeholder' => 'Enter Area Code']) !!}
                  </div>
            </div>

            {{-- Sandbox Certificate --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('sandbox_cert', 'Sandbox Certificate (.crt):') !!}
                        {!! Form::file('sandbox_cert', ['class' => 'form-control']) !!}
                        @if(!empty($mra_settings['sandbox_cert']))
                        <small class="text-success">Current file: {{ $mra_settings['sandbox_cert'] }}</small>
                        @endif
                  </div>
            </div>

            {{-- Production Certificate --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('production_cert', 'Production Certificate (.crt):') !!}
                        {!! Form::file('production_cert', ['class' => 'form-control']) !!}
                        @if(!empty($mra_settings['production_cert']))
                        <small class="text-success">Current file: {{ $mra_settings['production_cert'] }}</small>
                        @endif
                  </div>
            </div>

            <div class="clearfix"></div>

            {{-- Test Button --}}
            <div class="col-xs-12">
                  <button
                        type="button"
                        class="tw-dw-btn tw-dw-btn-success tw-text-white pull-right"
                        id="test_mra_btn">
                        Test MRA Connection
                  </button>
            </div>

      </div>
</div>