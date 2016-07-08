
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>管理中心登陆 V1.0</TITLE>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="/css/admin/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY onload=document.form1.name.focus();>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" bgColor=#002779 
border=0>
  <TR>
    <TD align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
        <TR>
          <TD><IMG height=23 src="/images/admin/login_1.jpg" 
          width=468></TD></TR>
        <TR>
          <TD><IMG height=147 src="/images/admin/login_2.jpg" 
            width=468></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=468 bgColor=#ffffff border=0>
        <TR>
          <TD width=16><IMG height=122 src="/images/admin/login_3.jpg" 
            width=16></TD>
          <TD align=middle>
            <TABLE cellSpacing=0 cellPadding=0 width=230 border=0>
              <FORM name="login" action="/Admin/logTodo" method="post">
                  <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
              <TR height=5>
                <TD width=5></TD>
                <TD width=56></TD>
                <TD></TD>
              </TR>
              <TR height=36>
                <TD></TD>
                <TD>用户名</TD>
                <TD><INPUT  style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" maxLength=15 size=20 value="{{ $data['uname'] or '' }}" name="uname" /></TD><span>{{ session("info") }}</span>
              </TR>
              <TR height=36>
                <TD>&nbsp; </TD>
                <TD>密码</TD>
                <TD><INPUT style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid"  type="password" maxLength=15 size=20 value="" name="password" /></TD>
              </TR>
              <TR height=5>
                <TD>&nbsp; </TD>
                <TD>验证码</TD>
                <TD><INPUT style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" type=test maxLength=15 size=8 value="{{ $data['code'] or '' }}" name="code" onfocus="dis(this);"><img src="{{ url('/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" align="top" />
                </TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
                <TD><INPUT type="submit" height=18 width=70 value="登录"/>
                </TD>
              </TR>
              </FORM>
            </TABLE>
          </TD>
          <TD width=16><IMG height=122 src="/images/admin/login_4.jpg" 
            width=16></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
        <TR>
          <TD><IMG height=16 src="/images/admin/login_5.jpg" 
          width=468></TD>
        </TR>
      </TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
        <TR>
          <TD align=right><A href="http://www.865171.cn/" target=_blank><IMG 
            height=26 src="/images/admin/login_6.gif" width=165 
            border=0></A>
          </TD>
        </TR>
      </TABLE>
    </TD>
  </TR>
</TABLE>
</BODY>
</HTML>
