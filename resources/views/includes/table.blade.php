<div class="table-responsive">
<table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Instructions</th>
                    <th scope="col">Academic Level</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Pages</th>
                    <th scope="col">Budget ($)</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->email}}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->instructions }}</td>
                <td>{{ $order->academic_level }}</td>
                <td>{{ $order->subject_id }}</td>
                <td>{{ $order->topic }}</td>
                <td>{{ $order->pages }}</td>
                <td>{{ $order->budget }}</td>
                <td>{{ $order->duration }}</td>
            </tr>
        @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        </div>