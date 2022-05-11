@extends('layouts.dashpord')
@section('content')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Edit Order</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Order Number</label>
                                        <input type="text" class="form-control" name="number"
                                            placeholder="Order Number" value="{{$order->number}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Product</label>
                                        <input type="text" class="form-control" name="product"
                                            placeholder="Product" value="{{$order->product}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Quntaty</label>
                                        <input type="text" class="form-control" name="quantity"
                                            placeholder="Quntaty" value="{{$order->quantity}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" name="amount"
                                            placeholder="Amount" value="{{$order->amount}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Date</label>

                                        <input class="form-control fc-datepicker fc-datepicker" placeholder="MM/DD/YYYY"
                                            type="text" name="date" value="{{$order->date}}">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label mt-0">Status</label>
                                        <select class="form-control select2 custom-select" data-placeholder="Choose one" name="status">
                                            <option label="Choose one">
                                            </option>
                                            <option @if($order->status == "pending") selected @endif value="pending">Pending</option>
                                            <option @if($order->status == "processing") selected @endif  value="processing">Processing </option>
                                            <option @if($order->status == "completed") selected @endif value="completed">Completed </option>
                                            <option @if($order->status == "declined") selected @endif value="declined">Declined  </option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- CONTAINER END -->
        </div>

@endsection
