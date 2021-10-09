<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 mt-2 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Laravel Localization</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <span class="me-3 py-2 text-dark">
                <select class="form-select form-select-sm language-switcher">
                    <option value="en" @if(App::getLocale() == 'en') selected @endif>English</option>
                    <option value="fr" @if(App::getLocale() == 'fr') selected @endif>French</option>
                </select>
            </span>
        </nav>
    </div>
</header>
