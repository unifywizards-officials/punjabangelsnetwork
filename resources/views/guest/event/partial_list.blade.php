<div class="row gutter-y-30">
    @foreach ($event as $event)
        <div class="col-md-12 col-lg-4">
            <div class="events-card">
                <div class="events-card__image">
                    <img src="{{ asset($event->image) }}" alt="{{ $event->image_alt }}">
                    <img src="{{ asset($event->image) }}" class="events-card__image--hover" alt="{{ $event->image_alt }}">
                </div><!-- /.events-card__image -->
                <div class="events-card__content">
                    <?php $date = \Carbon\Carbon::parse($event->publish_date); ?>
                    <div class="events-card__date">{{ $date->format('d') }} {{ $date->format('F') }}
                        {{ $date->format('Y') }}</div><!-- /.events-card__date -->
                    <ul class="events-card__meta list-unstyled">
                        <li>
                            <i class="fa fa-clock"></i>
                            <a
                                href="#">{{ \Carbon\Carbon::createFromFormat('H:i', $event->start_time)->format('h:i A') }}</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <a href="#">{{ $event->city }}</a>
                        </li>
                    </ul><!-- /.blog-card__meta -->
                    <h3 class="events-card__title"><a
                            href="{{ route('event.detail', [$event->slug]) }}">{{ $event->heading }}</a></h3>
                    <!-- /.events-card__title -->
                </div><!-- /.events-card__content -->
            </div><!-- /.events-card -->
        </div><!-- /.col-md-12 col-lg-4 -->
    @endforeach
</div>
