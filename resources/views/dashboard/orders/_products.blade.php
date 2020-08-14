<div id="print-area">
    <table class="table table-hover table-bordered text-white">

        <thead >
        <tr>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->quantity * $item->product->price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3>total <span>{{ number_format($order->total_price, 2) }}</span></h3>

</div>

<button class="btn btn-block btn-primary print-btn"><i class="fa fa-print"></i> print</button>
