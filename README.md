# hitokoto

A simple PHP hitokoto api.

# Feature

- Customize ID.

- JavaScript support.

# Example

## $id

Normal: Random ID

Option: `$id_min` ~ `$id_max`

Request URL: https://api.jimmyho.top/hitokoto/?id=1234

Request Method: `GET`

Respond: `恕我无礼，我觉得这世上唯一能够信任的人就是我自己。`

(The id of this sentence is `1234`.)

## $encode

Normal: `text`

Option: `javascript`

Request URL: https://api.jimmyho.top/hitokoto/?encode=javascript

Request Method: `GET`

Respond: `function jimmyhitokoto(){document.write("就算是对我抱有敌意的人，也是被某个人深爱着而降生在这个世界上的。");}`

(You can use it with `<script type="text/javascript" src="https://api.jimmyho.top/hitokoto/?encode=javascript"></script>
<span class="jimmyhitokoto"><script>jimmyhitokoto()</script></span>`)

# Acknowledgement

https://github.com/kokororin/hitokoto

http://hitokoto.cn
