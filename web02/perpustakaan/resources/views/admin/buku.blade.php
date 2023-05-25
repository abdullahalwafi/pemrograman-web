@extends('admin.layouts.index')
@section('content')
<!-- partial -->
<div class="content-wrapper">
    <div class="page-header">
    <h3 class="page-title">Buku</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buku</li>
        </ol>
    </nav>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-gradient-primary mb-3">+ Tambah Data</a>
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Table</h4>
            <table class="table table-hover">
            <thead class="table-success table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Harry Potter and the Philosopher's Stone</td>
                    <td>10</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>To Kill a Mockingbird</td>
                    <td>5</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>The Great Gatsby</td>
                    <td>7</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pride and Prejudice</td>
                    <td>3</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>1984</td>
                    <td>8</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>The Catcher in the Rye</td>
                    <td>4</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Animal Farm</td>
                    <td>6</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Brave New World</td>
                    <td>9</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>The Hobbit</td>
                    <td>2</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Lord of the Rings</td>
                    <td>7</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>To the Lighthouse</td>
                    <td>3</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Frankenstein</td>
                    <td>5</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>The Odyssey</td>
                    <td>4</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>The Lord of the Flies</td>
                    <td>6</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Crime and Punishment</td>
                    <td>2</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>The Adventures of Huckleberry Finn</td>
                    <td>7</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Moby-Dick</td>
                    <td>3</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>One Hundred Years of Solitude</td>
                    <td>5</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Don Quixote</td>
                    <td>4</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>The Alchemist</td>
                    <td>9</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        </div>
        </div>
    </div>
    </div>
</div>
@endsection