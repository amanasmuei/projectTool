<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <!-- <a href="#" class="simple-text logo-mini">{{ _('TCGT') }}</a> -->
            <a href="#" class="simple-text logo-normal text-center">{{ _('PROJECT1') }}</a>
        </div>
        <ul class="nav">
			<li @if ($pageSlug == 'Respository') class="active " @endif>
                <a href="{{ route('pages.project') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ _('Projects') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Requirement') class="active " @endif>
                <a href="{{ route('pages.project') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ _('Requirement') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Test Plan') class="active " @endif>
                <a href="{{ route('pages.project') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ _('Test Plan') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Test Suites') class="active " @endif>
                <a href="{{ route('pages.project') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ _('Test Suites') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Test Cases') class="active " @endif>
                <a href="{{ route('pages.project') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ _('Test Cases') }}</p>
                </a>
            </li>
        </ul>
        <ul></ul>
    </div>
</div>
