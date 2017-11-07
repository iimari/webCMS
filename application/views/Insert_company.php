<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<title>업체 추가</title>
</head>
<body>
<?php echo form_open('popup/insert_comapany'); ?>
    <h5>Company 추가</h5>
        <div class="company_input">
            <a>업체 이름 : </a><input type="text" name="c_name" value="" size="25" />
            <?php echo form_error('c_name'); ?>
            <a>홈페이지 주소 : </a><input type="text" name="c_homepage" value="" size="25" />
            <?php echo form_error('c_homepage'); ?>
        </br>
            <a>업체 펙스 : </a><input type="text" name="c_fax" value="" size="25" />
            <a>업체 전화번호 : </a><input type="text" name="c_tel" value="" size="25" />
        </br>
            <a>담당자 : </a><input type="text" name="c_manager" value="" size="15" />
            <a>담당자 전화번호 : </a><input type="text" name="c_phone" value="" size="20" />
            <a>담당자 이메일 : </a><input type="text" name="c_mail" value="" size="15" />
        </div>
        </br>
    <h5>호스팅</h5>

        <a>호스팅 신청</a><input type="checkbox" name="hosting_check" checked="checked" class="hosting_check" value="1"/>
        <div class="hosting_input">
            <a>호스팅 업체 : </a><input type="text" name="hosting_name" value="" size="10" />
            </br>
            <a>호스팅시작일 : </a><input type="text" name="hosting_st_d" value="" size="15" />
            <a>호스팅종료일 : </a><input type="text" name="hosting_ed_d" value="" size="15" />
        </br>    
            <a>FTP ID : </a><input type="text" name="hosting_ftp_id" value="" size="15" />
            <a>FTP PW : </a><input type="text" name="hosting_ftp_pw" value="" size="15" />
        </br>    
            <a>DB  ID : </a><input type="text" name="hosting_db_id" value="" size="15" />
            <a>DB  PW : </a><input type="text" name="hosting_db_pw" value="" size="15" />        
        </div>
        </br>            

        <h5>도메인</h5>
        <a>도메인 신청</a><input type="checkbox" name="domain_check" class="domain_check" value="1"/>
        <div class="domain_input" style="display:none;">
            <a>서비스업체 : </a><input type="text" name="domain_servicename" id="textTest" value="" size="15" />
            <a>도메인 ID  : </a><input type="text" name="domain_id" id="textTest" value="" size="15" />
            <a>도메인 PW : </a><input type="text" name="domain_pw" id="textTest" value="" size="15" />
            </br>
            <a>신청 도메인 주소 : </a><input type="text" name="domain_name" id="textTest" value="" size="15" />
            </br>
            <a>도메인 시작일 : </a><input type="text" name="domain_st_d" id="textTest" value="" size="15" />
            <a>도메인 종료일 : </a><input type="text" name="domain_ed_d" value="" size="15" />            
        </div>
        <br>

        <h5>유지보수</h5>
        <a>유지보수 신청</a><input type="checkbox" name="managerment_check" class="managerment_check" value="1"/>
        <div class="managerment_input"style="display:none;">
            <a>유지보수 시작일 : </a><input type="text" name="managerment_st_d" value="" size="15" />
            <a>유지보수 종료일 : </a><input type="text" name="managerment_ed_d" value="" size="15" />
        </div>
        </br>
        </br>
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
<script type="text/javascript">
 $(document).ready(function(){
    $('.domain_check').click(function(){
        if($(this).is(":checked")){
            $('.domain_input').show();
        }
        else if($(this).is(":not(:checked)")){
            $('.domain_input').hide();
        }
    });
    $('.hosting_check').click(function(){
        if($(this).is(":checked")){
            $('.hosting_input').show();
        }
        else if($(this).is(":not(:checked)")){
            $('.hosting_input').hide();
        }
    });
    $('.managerment_check').click(function(){
        if($(this).is(":checked")){
            $('.managerment_input').show();
        }
        else if($(this).is(":not(:checked)")){
            $('.managerment_input').hide();
        }
    });
});
</script>