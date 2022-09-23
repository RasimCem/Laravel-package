@if($quote)
    <div style="width: 100%; background-color: red; position: fixed; left: 0; bottom: 0; z-index: 1">
        <ul style="list-style: none; text-align: center">
            <li style="color: #ffffff; font-size: 25px; margin-bottom: 10px;">“
                <i>{{ $quote['quote'] }} </i> ”
                - {{ $quote['author'] }} </li>
        </ul>
    </div>
@endif

