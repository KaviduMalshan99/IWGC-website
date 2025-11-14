<form id="payment_form" method="POST" action="https://testsecureacceptance.cybersource.com/pay">
    @foreach($fields as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach

    <input type="hidden" name="signature" value="{{ $signature }}">
</form>

<script>
    document.getElementById('payment_form').submit();
</script>
