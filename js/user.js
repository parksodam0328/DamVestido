function checkMember() {
  var form = document.userForm;
  var userName = document.userForm.userName;
  var userID = document.userForm.userID;
  var userPW = document.userForm.userPW;
  var userPWCheck = document.userForm.userPWCheck;
  var userGender = document.userForm.userGender;
  var userEmail = document.userForm.userEmail;
  var phone1 = document.userForm.phone1;
  var phone2 = document.userForm.phone2;
  var phone3 = document.userForm.phone3;

  var regexID = /^[a-zA-Z0-9]+[a-zA-Z0-9]{4,12}$/;
  var regexPW = /^[a-zA-Z0-9]{4,12}$/;
  var regexEmail = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

  //이름 입력 여부 검사
  if (userName.value == "") {
      alert("이름을 입력해주세요!");
      userName.focus();
      return false;
  }

  //이름 길이 검사
  if (userName.value.length<2) {
      alert("이름을 2자 이상 입력해주세요!");
      userName.focus();
      return false;
  }

  //아이디 입력 여부 검사
  if (userID.value == "") {
      alert("아이디를 입력해주세요!");
      userID.focus();
      return false;
  }

  //아이디에 공백 사용하지 않기
  if (userID.value.indexOf(" ") >= 0) {
    alert("아이디에 공백을 사용할 수 없습니다.");
    userID.focus();
    return false;
  }

  //아이디 길이 체크
  if (userID.value.length<4 || userID.value.length>12) {
    alert("아이디는 4자이상 12자이하로 입력해주세요.");
    userPW.focus();
    return false;
  }

  //아이디 유효성 체크
  if (regexID.test(userID.value) == false) {
      alert("아이디는 영어+숫자 형식으로 작성해주세요!");
      userID.focus();
      return false;
  }

  //비밀번호 입력 여부 검사
  if(userPW.value=="") {
    alert("비밀번호를 입력해주세요!");
    userPW.focus();
    return false;
  }

  //비밀번호에 공백 사용하지 않기
  if (userPW.value.indexOf(" ") >= 0) {
    alert("비밀번호에 공백을 사용할 수 없습니다.");
    userPW.focus();
    return false;
  }

  //비밀번호 길이 체크
  if (userPW.value.length<4 || userID.value.length>16) {
    alert("비밀번호는 4자이상 16자이하로 입력해주세요.");
    userPW.focus();
    return false;
  }

  //비밀번호 유효성 체크
  if (regexPW.test(userPW.value) == false) {
      alert("비밀번호는 영어+숫자 형식으로 작성해주세요!");
      userPW.focus();
      return false;
  }

  //비밀번호 확인 입력 여부 검사
  if(userPWCheck.value=="") {
    alert("비밀번호 확인을 입력해주세요!")
    userPW.focus();
    return false;
  }

  //비밀번호 확인 일치 체크
  if(userPWCheck.value==userPW) {
    alert("비밀번호가 일치하지 않습니다! 다시 입력해주세요!");
    userPWCheck.focus();
    return false;
  }

  //성별 입력 여부 검사
  if (userGender.value == "") {
      alert("성별을 입력해주세요!");
      userGender.focus();
      return false;
  }

  //이메일 유효성 체크
  if (regexEmail.test(userEmail.vlaue)) {
      alert("이메일 양식이 틀렸습니다! 다시 입력해주세요!");
      userEmail.focus();
      return false;
  }

  //휴대폰 번호 유효성 체크
  if (phone1.value =="") {
      alert("휴대폰 번호를 입력해주세요!");
      phone1.focus();
      return false;
  }

  //휴대폰 번호 유효성 체크
  if (phone2.value =="") {
      alert("휴대폰 번호를 입력해주세요!");
      phone2.focus();
      return false;
  }

  //휴대폰 번호 길이 체크
  if (phone2.value.length>4 && phone2.value.length<0) {
      alert("4자이내로 입력해주세요!");
      phone2.focus();
      return false;
  }

  //휴대폰 번호 유효성 체크
  if (phone3.value =="") {
      alert("휴대폰 번호를 입력해주세요!");
      phone3.focus();
      return false;
  }

  //휴대폰 번호 길이 체크
  if (phone3.value.length>4 && phone3.value.length<0) {
      alert("4자이내로 입력해주세요!");
      phone3.focus();
      return false;
  }

  form.submit();
}

function loginMember() {
  var form = document.userForm;
  var userID = document.userForm.userID;
  var userPW = document.userForm.userPW;
  var phone3 = document.userForm.phone3;

  var regexID = /^[a-zA-Z0-9]+[a-zA-Z0-9]{4,12}$/;
  var regexPW = /^[a-zA-Z0-9]{4,12}$/;

  //아이디 입력 여부 검사
  if (userID.value == "") {
      alert("아이디를 입력해주세요!");
      userID.focus();
      return false;
  }

  //아이디에 공백 사용하지 않기
  if (userID.value.indexOf(" ") >= 0) {
    alert("아이디에 공백을 사용할 수 없습니다.");
    userID.focus();
    return false;
  }

  //아이디 길이 체크
  if (userID.value.length<4 || userID.value.length>12) {
    alert("아이디는 4자이상 12자이하로 입력해주세요.");
    userPW.focus();
    return false;
  }

  //아이디 유효성 체크
  if (regexID.test(userID.value) == false) {
      alert("아이디는 영어+숫자 형식으로 작성해주세요!");
      userID.focus();
      return false;
  }

  //비밀번호 입력 여부 검사
  if(userPW.value=="") {
    alert("비밀번호를 입력해주세요!");
    userPW.focus();
    return false;
  }

  //비밀번호에 공백 사용하지 않기
  if (userPW.value.indexOf(" ") >= 0) {
    alert("비밀번호에 공백을 사용할 수 없습니다.");
    userPW.focus();
    return false;
  }

  //비밀번호 길이 체크
  if (userPW.value.length<4 || userID.value.length>16) {
    alert("비밀번호는 4자이상 16자이하로 입력해주세요.");
    userPW.focus();
    return false;
  }

  //비밀번호 유효성 체크
  if (regexPW.test(userPW.value) == false) {
      alert("비밀번호는 영어+숫자 형식으로 작성해주세요!");
      userPW.focus();
      return false;
  }

  form.submit();
}
