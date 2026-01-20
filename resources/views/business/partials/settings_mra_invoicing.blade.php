<div class="pos-tab-content">
      <div class="row">

            <div class="col-xs-12">
                  <h4 class="customer-profile-group-heading">
                        MRA e-Invoicing Settings (Mauritius Revenue Authority)
                  </h4>
            </div>
            <div class="col-md-12">
                  <hr>
                  <h5>Business Details</h5>
                  <small>Business details registered with the Mauritius Revenue Authority</small>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_name', 'Business Name*:') !!}
                        {!! Form::text(
                        'mra_settings[businessName]',
                        $mra_settings['businessName'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business Name']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_tan', 'Business TAN*:') !!}
                        {!! Form::text(
                        'mra_settings[businessTan]',
                        $mra_settings['businessTan'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business TAN']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_brn', 'Business BRN*:') !!}
                        {!! Form::text(
                        'mra_settings[businessBrn]',
                        $mra_settings['businessBrn'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business BRN']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_address', 'Business Address*:') !!}
                        {!! Form::text(
                        'mra_settings[businessAddress]',
                        $mra_settings['businessAddress'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business Address']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_phone_no', 'Business Phone No*:') !!}
                        {!! Form::text(
                        'mra_settings[businessPhoneNo]',
                        $mra_settings['businessPhoneNo'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business Phone No']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_counter_no', 'Business EBS Counter No*:') !!}
                        {!! Form::text(
                        'mra_settings[businessCounterNo]',
                        $mra_settings['businessCounterNo'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business EBS Counter No']
                        ) !!}
                  </div>
            </div>
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_business_cashier_id', 'Business Cashier ID*:') !!}
                        {!! Form::text(
                        'mra_settings[businessCashierId]',
                        $mra_settings['businessCashierId'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Business Cashier ID']
                        ) !!}
                  </div>
            </div>
            <div class="col-md-12">
                  <hr>
                  <h5>API Credentials</h5>
            </div>
            {{-- Environment --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_environment', 'Environment*:') !!}
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
                        {!! Form::label('mra_ebs_id', 'EBS MRA ID*:') !!}
                        {!! Form::text(
                        'mra_settings[ebsMraId]',
                        $mra_settings['ebsMraId'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter EBS MRA ID']
                        ) !!}
                  </div>
            </div>

            {{-- Username --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_username', 'Username*:') !!}
                        {!! Form::text(
                        'mra_settings[mra_username]',
                        $mra_settings['mra_username'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Username']
                        ) !!}
                  </div>
            </div>
            {{-- Password --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_password', 'Password*:') !!}
                        {!! Form::text(
                        'mra_settings[mra_password]',
                        $mra_settings['mra_password'] ?? '',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Password']
                        ) !!}
                  </div>
            </div>

            {{-- Area Code --}}
            <div class="col-xs-6">
                  <div class="form-group">
                        {!! Form::label('mra_area_code', 'Area Code*:') !!}
                        {!! Form::text(
                        'mra_settings[areaCode]',
                        $mra_settings['areaCode'] ?? '305',
                        ['class' => 'form-control','required' => true, 'placeholder' => 'Enter Area Code']) !!}
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