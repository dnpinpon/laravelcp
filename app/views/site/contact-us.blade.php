@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h3>{{{ Lang::get('site.contact_us') }}}</h3>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
				{{ Form::open() }}
				{{ Form::honeypot('contact_us', 'contact_us_time') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span>
                                </span>
                            <input name="name" type="text" class="form-control" id="name" placeholder="{{{ Lang::get('site.your_name') }}}" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="email">&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-envelope"></span>
                                </span>
                                <input name="email" type="email" class="form-control" id="email" placeholder="{{{ Lang::get('site.your_email') }}}" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">&nbsp;</label>
                             <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-question"></span>
                                </span><select id="subject" name="subject" class="form-control" required="required">
                                <option value="" selected="">{{{ Lang::get('site.subject') }}}</option>
                                <option value="{{{ Lang::get('site.email_option1') }}}">{{{ Lang::get('site.email_option1') }}}</option>
                                <option value="{{{ Lang::get('site.email_option1') }}}">{{{ Lang::get('site.email_option2') }}}</option>
                                <option value="{{{ Lang::get('site.email_option1') }}}">{{{ Lang::get('site.email_option3') }}}</option>
                            </select></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">&nbsp;</label>
                            <textarea name="body" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="{{{ Lang::get('site.message') }}}"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">{{{ Lang::get('site.send_message') }}}</button>
                    </div>
                </div>
				{{ Form::close(); }}
            </div>
        </div>
        <div class="col-md-4">
            <legend><span class="fa fa-globe"></span> {{{ Lang::get('site.our_location') }}}</legend>
            <address>
                {{ Setting::get('site.contact_address') }}
            </address>
            <address>
                <a href="mailto:#">{{{ Setting::get('site.contact_email') }}}</a>
            </address>
        </div>
    </div>
</div>

@stop
