@extends('layouts.app')
@section('script')
<script>
    $(function () {
            if('{{old('type')}}'==='normal_user'){
                $('#userType').prop('checked', false);
                $('#normalUser').attr("hidden", false);
                $('#charity').attr("hidden", true);
                $('#type').val('normalCharity');
            }else{
                $('#userType').prop('checked', true);
                $('#normalUser').attr("hidden", true);
                $('#charity').attr("hidden", false);
                $('#type').val('normalUser');
            }
        }
    );
    function changeType() {
        console.log(document.getElementById('userType').checked);
        if (document.getElementById("userType").checked) {
            $('#normalUser').attr("hidden", true);
            $('#charity').attr("hidden", false);
            $('#type').val('normalUser');
        } else {
            $(document).ready(function () {
                $('#normalUser').attr("hidden", false);
                $('#charity').attr("hidden", true);
                $('#type').val('normalCharity');
            });
        }
    }
</script>
@endsection
@section('content')
    <div class="flipSwitch">
        <input id="type" type="text" name="type" value="normalUser" hidden>
        <input type="checkbox" id="userType" name="flipSwitch" class="flipSwitch-cb" onchange="changeType()">
        <label class="flipSwitch-label" for="userType">Charity?</label>
    </div>
    @include('auth.normal_user')
    @include('auth.charity')
@endsection
