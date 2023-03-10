$background_color : #fcee6d;
$element_highlight : $background_color;
$calendar_color: #29323f;

$day_pill_size : 25px;
$pill_margin : 8px;
html {
  position: relative;
  position: absolute; width:100%; height: 100%;
  left:0; top:0; right:0; bottom: 0;
}

body {
  background-color:desaturate($background_color, 30);
}

section.calendar {
  background-color: $calendar_color;
  font-family: 'Dosis', sans-serif;
  color: #fff;
  width: 290px; padding:45px;
  position: absolute;
  top:50%; left:50%; transform: translateY(-50%) translateX(-50%);
  box-shadow: 5px 10px 20px rgba(0,0,0,.6);
  border-radius:5px;

  h1 {
    text-align: center;
    color: $element_highlight;
    margin: 0 0 30px 0;
  }
  
  form {
    position:relative;
    display: flex;    
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    align-content: flex-start;

    label.weekday{
      display: inline-block;
      width:$day_pill_size; margin: $pill_margin;
      text-align: center;
      color: #999;
    }
    
    form {
      margin:0; padding:0;
      
    }
    
    label.day{
      display: inline-block;
      width:$day_pill_size; margin: $pill_margin;
      
      span {
        display: inline-block;
        width:$day_pill_size; height:$day_pill_size; line-height: $day_pill_size;
        margin: -2px 0 0 -2px;
        border-radius: 50%;
        border: 2px solid $calendar_color;
        text-align:center;
        transition: all .2s linear;
        cursor: pointer;
        
        &:hover {
          
          border-color: darken(desaturate($element_highlight, 20), 10);
        }
      }
      
      em {
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border-color: $calendar_color;
        width: 3px; height:3px; background-color: darken($element_highlight, 50);
        margin-left:11px; margin-top: 2px;
        opacity: 0;
        transition: all .2s linear;
      }
      
      input[type=text]{
        border:0; opacity:0;
        position:absolute;
        margin-top: 40px; 
        left: -45px; width: 380px; height: 1px; padding: 0;
        outline: none; font-size: 16px;
        transition: height .2s linear, opacity .2s linear, color .02s linear;
        color: #fff;
        
        &:focus{
          opacity: 1;
          height: 35px; padding:10px 40px;
          left: -45px; width: 300px;
          color: $calendar_color;
          
          &+ span {
            color: $element_highlight;
            border-color: $element_highlight;
            background: $element_highlight;
            color: $calendar_color;
            font-weight: bold;
            margin-bottom: 65px;
          }
          
          &~ em {
            border-radius: 0;
            border: 5px solid transparent;
            background: transparent;
            border-bottom-color:rgba(255,255,255,1);
            margin-top:-62px; margin-left:7px;
            width:0; height:0;
            display:inline-block; opacity: 1;
          }
        }
        
        &:valid {
          &+ span {

          }
          &~ em {
            display: inline-block;
            opacity: 1;
          }
        }
        
      }
      
      &.invalid {
        opacity: 0;  width:$day_pill_size; height:$day_pill_size;
        
        span, input {
          display: none;
        }
      }
    }
  }

  
  div.clearfix {
    clear:both;
  }
  
  div.hidden {
    display:none;
  }
  
}
