@extends('layout.layout')
@section('content')
          <section class="filters_section section_2">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="custom_btn">등록</a>
            <div class="filters">
              <p>선택한 0건</p>
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton4"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  승인상태 변경
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                  <li><a class="dropdown-item" href="#">승인완료</a></li>
                  <li><a class="dropdown-item" href="#">승인거부</a></li>
                </ul>
              </div>
              <a href="" class="custom_btn">저장</a>
            </div>
          </section>
          <section class="table-container">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>NO</th>
                  <th>기존유형</th>
                  <th>신청유형</th>
                  <th>제출서류</th>
                  <th>신청일시</th>
                  <th>승인여부</th>
                  <th>승인거부 사유</th>
                  <th>승인일시</th>
                  <th>관리자</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>1</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="warning_label">승인대기</span></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>2</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</sapn></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="danger_label">승인대기</span></td>
                  <td>
                    서류 식별 불가 금융투자업자에 계좌를 개설한지 1년 미만으로
                    전문투자자 승인 불가
                  </td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>3</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="success_label">승인대기</span></td>
                  <td></td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>4</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="warning_label">승인대기</span></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>5</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</sapn></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="danger_label">승인대기</span></td>
                  <td>
                    서류 식별 불가 금융투자업자에 계좌를 개설한지 1년 미만으로
                    전문투자자 승인 불가
                  </td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>6</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="success_label">승인대기</span></td>
                  <td></td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>7</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="warning_label">승인대기</span></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>8</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</sapn></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="danger_label">승인대기</span></td>
                  <td>
                    서류 식별 불가 금융투자업자에 계좌를 개설한지 1년 미만으로
                    전문투자자 승인 불가
                  </td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>9</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="success_label">승인대기</span></td>
                  <td></td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>10</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="warning_label">승인대기</span></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>11</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</sapn></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="danger_label">승인대기</span></td>
                  <td>
                    서류 식별 불가 금융투자업자에 계좌를 개설한지 1년 미만으로
                    전문투자자 승인 불가
                  </td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>12</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="success_label">승인대기</span></td>
                  <td></td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>13</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="warning_label">승인대기</span></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div></td>
                  <td>14</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</sapn></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="danger_label">승인대기</span></td>
                  <td>
                    서류 식별 불가 금융투자업자에 계좌를 개설한지 1년 미만으로
                    전문투자자 승인 불가
                  </td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
                <tr>
                  <td><div class="checkbox-wrapper-48">
                    <label><input type="checkbox" name="cb"></label>
                  </div>

                  </td>
                  <td>15</td>
                  <td>소득적격</td>
                  <td>개인전문</td>
                  <td><span class="custom_label">보기</span></td>
                  <td>2023-01-10 09:00:00</td>
                  <td><span class="success_label">승인대기</span></td>
                  <td></td>
                  <td>2023-01-10 09:00:00</td>
                  <td>김관리자</td>
                </tr>
              </tbody>
            </table>
          </section>
          <section class="custom_pagination">
            <ul>
              <li><a href=""><i class="fa fa-angle-double-left" ></i>
              </a>
              </li>
              <li><a href=""><i class="fa fa-angle-left" ></i> </a></li>
              <li><a href="" class="active">1 </a></li>
              <li><a href="">2 </a></li>
              <li><a href="">3 </a></li>
              <li><a href="">4 </a></li>
              <li><a href="">5 </a></li>
              <li><a href="">6 </a></li>
              <li><a href="">7 </a></li>
              <li><a href="">8 </a></li>
              <li><a href="">9 </a></li>
              <li><a href="">10 </a></li>
              <li><a href=""><i class="fa fa-angle-right" ></i> </a></li>
              <li><a href=""><i class="fa fa-angle-double-right" ></i> </a></li>
            </ul>
          </section>
@endsection
