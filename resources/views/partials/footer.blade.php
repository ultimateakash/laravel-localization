<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).on('change', '.language-switcher', function() {
        window.location.href = "{{ url('setlocale') }}" + '/' + $(this).val();
    })
</script>
