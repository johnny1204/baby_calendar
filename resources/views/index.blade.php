<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
  <div id="app">
    <div class="week">
      <div>&nbsp;</div>
      <div class="time-container">
        <div class="time"><span>0:00</span></div>
        <div class="time"><span>1:00</span></div>
        <div class="time"><span>2:00</span></div>
        <div class="time"><span>3:00</span></div>
        <div class="time"><span>4:00</span></div>
        <div class="time"><span>5:00</span></div>
        <div class="time"><span>6:00</span></div>
        <div class="time"><span>7:00</span></div>
        <div class="time"><span>8:00</span></div>
        <div class="time"><span>9:00</span></div>
        <div class="time"><span>10:00</span></div>
        <div class="time"><span>11:00</span></div>
        <div class="time"><span>12:00</span></div>
        <div class="time"><span>13:00</span></div>
        <div class="time"><span>14:00</span></div>
        <div class="time"><span>15:00</span></div>
        <div class="time"><span>16:00</span></div>
        <div class="time"><span>17:00</span></div>
        <div class="time"><span>18:00</span></div>
        <div class="time"><span>19:00</span></div>
        <div class="time"><span>20:00</span></div>
        <div class="time"><span>21:00</span></div>
        <div class="time"><span>22:00</span></div>
        <div class="time"><span>23:00</span></div>
      </div>
    </div>
    <div class="week">
      <div>月</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>火</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>水</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>木</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>金</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>土</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <div class="week">
      <div>日</div>
      <div class="time-container">
        <time-block v-for="n in 24" :key=n :time="n-1" v-on:open-modal="openModal"></time-block>
      </div>
    </div>
    <modal :show-modal="this.showModal" :time="this.time" v-on:close-modal="closeModal"></modal>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>