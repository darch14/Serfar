<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Unit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
      <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->category }}</td>
          <td>{{ $product->unit }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
