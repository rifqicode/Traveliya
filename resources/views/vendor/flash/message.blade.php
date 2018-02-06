@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="alert
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}"
                    role="alert"
        >
            @if ($message['important'])
              <!-- <input type="button" value="Click Me" style="float: right;"> -->
              <a href="{{ url('verifikasi' )}}" style="float:right;">Verifikasi Sekarang</a>
                <!-- <button type="button"
                        class="btn btn-danger"
                        data-dismiss="alert"
                        aria-hidden="true"
                >Verifikasi Sekarang </button> -->
            @endif

            {!! $message['message'] !!}
        </div>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
