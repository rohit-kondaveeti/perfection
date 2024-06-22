  <!--modals-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">투자유형 변경</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td class="label">회원번호</td>
              <td><input type="text" class="custom-input form-control" /></td>
            </tr>
            <tr>
              <td class="label">회원명/법인명</td>
              <td><input type="text" class="custom-input form-control" /></td>
            </tr>
            <tr>
              <td class="label">예치금잔액<span class="required"></span></td>
              <td> <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton4"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                일반개인
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                  <li><a class="dropdown-item" href="#">일반개인</a></li>
                  <li><a class="dropdown-item" href="#">소득적격</a></li>
                  <li><a class="dropdown-item" href="#">법인</a></li>
                  <li><a class="dropdown-item" href="#">여신금융</a></li>
                  <li><a class="dropdown-item" href="#">P2P온투</a></li>
                </ul>
              </div></td>
            </tr>
            <tr>
              <td class="label">투자건수<span class="required"></span></td>
              <td><input type="file" class="custom-input form-control" /></td>
            </tr>
          </table>
          <ul style="margin-top: 10px;font-size: 14px;">
            <li>파일 형식은 jpg, jpeg, gif, png, pdf만 가능합니다.</li>
            <li>최대 10개, 100MB까지 등록이 가능합니다.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="custom_btn" data-bs-dismiss="modal">저장</button>
          <button type="button" data-bs-toggle="modal" data-bs-target="#success_modal" class="custom_btn_white">취소</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="success_modal" tabindex="-1" aria-labelledby="success_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-circle-o" ></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="success_text">저장되었습니다</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="custom_btn" data-bs-dismiss="modal">확인</button>
        </div>
      </div>
    </div>
  </div>

