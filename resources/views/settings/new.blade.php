{{ Form::open( array(
    'route' => 'setting.create',
    'method' => 'post',
    'id' => 'form-add-setting'
) ) }}

{{ Form::label( 'key', 'Setting Name:' ) }}
{{ Form::text( 'key', '', array(
    'id' => 'key',
    'placeholder' => 'Enter Setting Name',
    'maxlength' => 20,
    'required' => true,
) ) }}
{{ Form::label( 'value', 'Setting Value:' ) }}
{{ Form::text( 'value', '', array(
    'id' => 'value',
    'placeholder' => 'Enter Setting Value',
    'maxlength' => 30,
    'required' => true,
) ) }}

{{ Form::submit( 'Add Setting', array(
    'id' => 'btn-add-setting',
) ) }}

{{ Form::close() }}

{{--<script>--}}
    {{--jQuery( document ).ready( function( $ ) {--}}

        {{--$( '#form-add-setting' ).on( 'submit', function() {--}}

            {{--//.....--}}
            {{--//show some spinner etc to indicate operation in progress--}}
            {{--//.....--}}

            {{--$.post(--}}
                {{--$( this ).prop( 'action' ),--}}
                {{--{--}}
                    {{--"_token": $( this ).find( 'input[name=_token]' ).val(),--}}
                    {{--"setting_name": $( '#setting_name' ).val(),--}}
                    {{--"setting_value": $( '#setting_value' ).val()--}}
                {{--},--}}
                {{--function( data ) {--}}
                    {{--//do something with data/response returned by server--}}
                {{--},--}}
                {{--'json'--}}
            {{--);--}}

            {{--//.....--}}
            {{--//do anything else you might want to do--}}
            {{--//.....--}}

            {{--//prevent the form from actually submitting in browser--}}
            {{--return false;--}}
        {{--} );--}}

    {{--} );--}}
{{--</script>--}}