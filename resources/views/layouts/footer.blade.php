<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" target="blank" class="nav-link">
                    {{ _('DOCUMENTATION') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" target="blank" class="nav-link">
                    {{ _('SUBSCRIBE') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ _('About Us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ _('Blog') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ _('made with') }} <i class="tim-icons icon-heart-2"></i> {{ _('by') }}
            <a href="#" target="_blank">{{ _('Nurul Hayati') }}</a> {{ _('for a better web') }}.
        </div>
    </div>
</footer>
