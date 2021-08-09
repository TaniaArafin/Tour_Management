<style>
    .packageImage {
        object-fit: cover;
    }
</style>

<h3 class="boldText textPrimary text-center">All Avaiable Packages</h3>

<table class="table table-hover">
    <thead>
        <tr class="semiBoldText">
            <td class="col-2">Image</td>
            <td class="col-3">Title</td>
            <td class="col-1">Price</td>
            <td class="col-1">Discount</td>
            <td class="col-2">Final Price</td>
            <td class="col-1">Review</td>
            <td colspan="2" class="col-2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($packages as $item)
            <tr class="mediumText">
                <td class="col-2">
                    <img src="{{ asset('storage/package/'. $item['file_path']) }}" class="ratio ratio-16x9">
                </td>
                <td class="col-3">{{$item['title']}}</td>
                <td class="col-1">{{$item['price']}}</td>
                <td class="col-1">{{$item['discount']}}</td>
                <td class="col-2">{{$item['finalPrice']}}</td>
                <td class="col-1">{{$item['reviewPoint']}} ({{$item['totalReview']}})</td>
                <td class="col-1">
                    <a class="btn text-light" style="background-color: #ea5d11" href="{{url('packages/'.$item['id'].'/edit')}}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td class="col-1">
                    <form action="{{ url('packages/'.$item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>