html, body {
    min-height : 100%;
    width : 100%;
    background-color : #fff;
    color : #636b6f;
    font-family : consolas;
    margin : 0;
    display : flex;
}
 .page {
    width : 100%;
    min-height : 100%;
    display : flex;
    flex-direction : column;
}
 .header {
    height : 50px;
    width : 100%;
    display : flex;
}
 .header > a {
    color : rgba(0, 0, 150, .75);
    text-decoration : none;
    font-size : 24px;
    margin : auto 20px;
}
 .header > a:hover {
    text-decoration : underline;
}
 .content {
    margin : auto;
    text-align : center;
}
 .content > h1 {
    font-size : 64px;
}
 .footer {
    height : 100px;
    width : 100%;
    display : flex;
}
 .flex {
    flex : 1;
}
 .btn {
    display : flex;
    height : 50px;
    width : 100px;
    margin : auto 20px;
    border : 1px solid #eee;
    cursor : pointer;
}
 .btn > span {
    margin : auto;
}
 .btn.green {
    color : rgba(0, 150, 0, .75);
}
 .btn.green:hover {
    background : rgba(0, 150, 0, .75);
    color : #fff;
}
 .btn.red {
    color : rgba(200, 0, 0, .75);
}
 .btn.red:hover {
    background : rgba(200, 0, 0, 0.75);
    color : #fff;
}
 .btn.submit {
    font-size : 24px;
    width : 320px;
    height : 40px;
    margin : 20px 5px;
    padding : 5px;
    border-radius : 30px;
    background : #fafafa;
}
 .btn.submit:hover {
    border : 1px solid #000;
    color : #000;
    transition : all 100ms ease;
    background : #fff;
}
 .alternative-option {
    margin : 10px 0;
}
 .alternative-option > a {
    font-size : 16px;
    width : 320px;
    height : 40px;
    margin : 0 5px auto;
    padding : 5px;
    color : #ccc;
    text-decoration : none;
}
 .alternative-option > a:hover {
    color : #000;
    text-decoration : underline;
}
 .input {
    font-size : 24px;
    margin : 10px 0;
}
 .input > input {
    width : 320px;
    height : 40px;
    outline : none;
    border : 1px solid #ddd;
    font-size : 20px;
    padding : 5px;
    margin : 0 5px;
}
 .input > label {
    margin : auto 5px;
}
 .invalid-input > input {
    border : 1px solid rgba(200, 0, 0, .5);
}
 .layout-row {
    display : flex;
}
 .layout-column {
    display : flex;
    flex-direction : column;
}
 .space {
    position : relative;
    height : 100px;
}
 .err {
    font-size : 16px;
    color : rgba(200, 0, 0, .5);
}
 .txt {
    font-size : 16px;
    color : #aaa;
    margin : 20px 0;
}
 .txt > .p {
    width : 320px;
    margin : auto 5px;
}
