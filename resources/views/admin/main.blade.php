<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
        <META http-equiv=Content-Type content="text/html; charset=gb2312">
        <LINK href="/css/admin/admin.css" type="text/css" rel="stylesheet">
        <script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
        <link type="text/css" rel="stylesheet" href="{{ asset(Session::get("userData")->avartar) }}" />
    </HEAD>
    <BODY>
        <TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
            <TR height=28>
                <TD background=/images/admin/title_bg1.jpg>当前位置: </TD></TR>
            <TR>
                <TD bgColor=#b1ceef height=1></TD></TR>
            <TR height=20>
                <TD background='/images/admin/shadow_bg.jpg'></TD></TR></TABLE>
        <TABLE cellSpacing=0 cellPadding=0 width="90%" align=center border=0>
            <TR height=100>
                <TD align=middle width=100><IMG height=100 src="{{ Session::get("userData")->avartar }}" width=90></TD>
                <TD width=60>&nbsp;</TD>
                <TD>
                    <TABLE height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>

                        <TR>
                            <TD>当前时间：{{date("Y:m:d,H:i:s")}}</TD></TR>
                        <TR>
                            <TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px"><a href="/Admin/pinfo">{{ Session::get("userData")->nickname }}</a></TD></TR>
                        <TR>
                            <TD>欢迎进入网站管理中心！</TD></TR></TABLE></TD></TR>
            <TR>
                <TD colSpan=3 height=10></TD></TR></TABLE>
        <TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
            <TR height=20>
                <TD></TD></TR>
            <TR height=22>
                <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff" 
                    align=middle background='/images/admin/title_bg2.jpg'>您的相关信息</TD></TR>
            <TR bgColor=#ecf4fc height=12>
                <TD></TD></TR>
            <TR height=20>
                <TD></TD></TR></TABLE>
        <TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
            <TR>
                <TD align=right width=100>登陆帐号：</TD>
                <TD style="COLOR: #880000">{{ Session::get("userData")->uname }}</TD></TR>

            <TD align=right>注册时间：</TD>
            <TD style="COLOR: #880000">{{ Session::get("userData")->created_at }}</TD></TR>
         <TR>
            <TD align=right>更新时间：</TD>
            <TD style="COLOR: #880000">{{ Session::get("userData")->updated_at }}</TD></TR>
         <TR>
            <TD align=right>网站介绍：</TD>
            <TD style="COLOR: #880000">运动让您成为一个不一样的自己</TD></TR>
      </TABLE>
</BODY>
</HTML>