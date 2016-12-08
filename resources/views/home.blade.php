@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'foo', 'method' => 'post')) !!}
                        <div id="ing-coll-fields">
                            <p><label for="email">E-Mail: <input name="email[]" type="text"/></label></p>
                        </div>
                        <a href="#" id="addLnk"><i class="fa fa-btn fa-plus"></i>Add another email!</a><br>
                        {!! Form::submit('outer!') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function() {
        var scntDiv = $('#ing-coll-fields');
        var i = $('#ing-coll-fields p').size() + 1;
        
        $('#addLnk').click(function() {
                $('<p><label for="email">E-Mail: '+
                    '<input name="email[]" type="text"/>'+
                    '<a href="#" class="remScnt">'+
                        '<i class="fa fa-btn fa-close"></i>Remove'+
                    '</a><br></label></p>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        scntDiv.on('click', '.remScnt', function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
    });
</script>
@endsection