<!DOCTYPE html>
<html>
<head>
    <title>我的第一个Laravel页面</title>
    <style>
        .skill-level {
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>你好, {{ $name }}!</h1>
    <p>我的技能</p>
    <ul>
        @foreach($skills as $skill)
            <li>
                {{ $skill->name }}
                <span class="skill-level">
                    (熟练度： {{ str_repeat('*', $skill->level) }})
                </span>
            </li>
        @endforeach
    </ul>
</body>
</html>
