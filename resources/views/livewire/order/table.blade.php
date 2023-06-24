<div>
    <div class="table-responsive">
    <table class="table table-bordered" style="min-width: 100%">
        <thead>
            <tr>
                <th>Pelanggan</th>
                <th>WA</th>
                <th>Address</th>
                <th>GMap</th>
                <th>Harga</th>
                <th>FEE Aplikasi</th>
                <th>FEE Kurir</th>
                <th>Orders</th>
                <th>Status</th>
                <th>Kirim Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->customer_wa}}</td>
                    <td>{{$order->customer_address}}</td>
                    <td>
                        <a target="_blank" href="{{"https://www.google.com/maps/search/?api=1&query=" . $order->lat . ',' . $order->long}}">Open In GMAP</a>
                    </td>
                    <td>{{number_format($order->price, 0, ',', '.') }}</td>
                    <td>{{number_format($order->app_fee, 0, ',', '.') }}</td>
                    <td>{{number_format($order->courir_fee, 0, ',', '.') }}</td>
                    <td>
                        <ul>
                            @foreach ($order->items as $item)
                                <li>{{$item->qty}}X {{$item->product->name}} - {{$item->price}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @if ($order->status == 'created')
                            <span class="btn btn-block btn-outline-success btn-xs">BARU</span>
                        @else
                            <span class="btn btn-block btn-outline-info btn-xs">ON-PROCCESS</span>
                        @endif
                    </td>
                    {{-- <td>
                        <x-adminlte-select name="kurir_id" wire:model="kurir_id">
                            <option>Kurir</option>
                            @foreach ($kurirs as $kurir)
                                <option value="{{$kurir->id}}">{{$kurir->full_name}}</option>
                            @endforeach
                        </x-adminlte-select>
                    </td> --}}
                    <td>
                        @if ($order->status == 'created')
                            <x-adminlte-button label="Prosess" class="btn-sm" theme="info" icon=" fas fa-arrow-alt-circle-right"
                            wire:click="proccess('{{$order->id}}')"/>
                        @else
                            <x-adminlte-button disabled label="Prosess" class="btn-sm" theme="info" icon="fas fa-arrow-alt-circle-right" wire:click="proccess('{{$order->id}}')"/>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

