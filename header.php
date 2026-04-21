<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 목록</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4a69bd;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        .good {
            color: green;
            font-weight: bold;
        }

        .low {
            color: orange;
            font-weight: bold;
        }

        .out {
            color: red;
            font-weight: bold;
        }

        .summary {
            margin-top: 30px;
            padding: 20px;
            background-color: #eef3ff;
            border-radius: 8px;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>상품 목록 페이지</h1>