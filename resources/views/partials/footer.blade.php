<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).on('change', '.language-switcher', function() {
        var localeUrl = 'setlocale/' + $(this).val();
        window.location.href = "{{ url('/') }}" + '/'+ localeUrl;
    })
</script>
