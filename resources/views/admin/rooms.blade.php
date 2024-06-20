<x-admin-layout>
    <x-slot:title>
        Quản lí phòng
    </x-slot:title>
    <div class="bang" id="quanLyPhong">
        <div class="tableName">Quản lý phòng</div>
        <div class="row py-2">
            <div class="col-8">
                <div class="checkbox-group">
                    <label for="checkbox1">
                        <input class="check" type="checkbox" id="checkbox1" name="options" value="Option 1" />
                        Phòng còn trống
                    </label>
                    <label for="checkbox2">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Phòng đầy
                    </label>
                    <label for="checkbox3">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Phòng đang hư
                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
                </div>
            </div>
        </div>


        <div class="table-responsive bang-noi-dung">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-12">ID</th>
                        <th scope="col" class="text-12">Tên Phòng</th>
                        <th scope="col" class="text-12">Giới tính</th>
                        <th scope="col" class="text-12">Số lượng sinh viên</th>
                        <th scope="col" class="text-12">Trạng thái</th>
                        <th scope="col" class="text-12">Công Cụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-12">1</td>
                        <td class="text-12">B3001</td>
                        <td class="text-12">Nữ</td>
                        <td class="text-12">13/15</td>
                        <td class="text-12">Phòng tốt</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="groupbutton">
            <button class="btn-file">Xuất file</button>
            <button class="btn-file">Nhập file</button>
        </div>
    </div>
</x-admin-layout>