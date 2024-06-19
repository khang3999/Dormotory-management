<x-admin-layout>
    <x-slot:title>
        Withdrawal form
    </x-slot:title>
    <div class="d-flex mt-5">
        <form class="mx-auto form-withdrawal" action="">
            <h5 class="text-center">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5>
            <h5 class="text-center">Độc lập - Tự do - Hạnh phúc</h5>
            <div class="line-short mx-auto">
                <hr>
            </div>
            <h3 class="text-center">ĐƠN XIN RA KHỎI KÝ TÚC XÁ</h3>
            <p>Kính gửi:<b class="bold"> Phòng Công tác Chính trị - Học sinh sinh viên</b></p>
            <div class="row g-3 align-items-center my-2">
                <div class="col-1">
                    <label for="name" class="col-form-label">Tên em là: </label>
                </div>
                <div class="col-6">
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <div class="col-1">
                    <label for="mssv" class="col-form-label">Mssv: </label>
                </div>
                <div class="col-4">
                    <input type="text" id="mssv" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-1">
                    <label for="classroom" class="col-form-label">Lớp: </label>
                </div>
                <div class="col-11">
                    <input type="text" id="classroom" class="form-control" name="classroom">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-1">
                    <label for="faculty" class="col-form-label">Khoa: </label>
                </div>
                <div class="col-6">
                    <input type="text" id="faculty" class="form-control" name="faculty">
                </div>
                <div class="col-1">
                    <label for="academic" class="col-form-label">Khóa: </label>
                </div>
                <div class="col-4">
                    <input type="text" id="academic" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center my-2">
                <div class="col-3">
                    <label for="room" class="col-form-label">Hiện đang lưu trú tịa phòng: </label>
                </div>
                <div class="col-9">
                    <input type="text" id="room" class="form-control" name="room">
                </div>
            </div>
            <p>Nay em làm đơn này kính đề nghị Phòng Công tác Chính trị - Học sinh sinh viên cho phép em được chấm dứt hợp đồng cho thuê chỗ ở trước thời hạn.</p>
            <div class="row g-3 align-items-center my-2">
                <div class="col-1">
                    <label for="reason" class="col-form-label">Lý do: </label>
                </div>
                <div class="col-11">
                    <textarea id="reason" class="form-control" name="reason"></textarea>
                </div>
            </div>
            <p><b class="">Em cam kết</b>: Đã bàn giao tài sản KTX cho Quản lý KTX và sẽ chuyern tư trang hành lý cá nhân sau khi hoàn tất thủ tục xin ra khỏi KTX.</p>
            <p>Kính mong Phòng Công tác Chính trị - Học sinh sinh viên chấp thuận.<br>Trân trọng cảm ơn.</p>
            <p>*Vui lòng kiểm tra toàn bộ thông tin trước khi nộp đơn.</p>
            <button class="btn btn-primary">Nộp đơn</button>
        </form>
    </div>

</x-admin-layout>