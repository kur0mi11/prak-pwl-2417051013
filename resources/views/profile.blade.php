<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            background: linear-gradient(180deg, #f5eaff 0%, #f3d9ff 35%, #fef3c7 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .profile-container {
            width: 100%;
            max-width: 900px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .avatar-wrap {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #b18cf8;
            margin-bottom: 24px;
            box-shadow: 0 8px 20px rgba(177, 140, 248, 0.22);
            background: linear-gradient(135deg, #f3e8ff, #fef3c7);
        }

        .avatar-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .profile-info {
            width: 100%;
            max-width: 440px;
        }

        .info-box {
            background: linear-gradient(90deg, rgba(244, 214, 255, 0.9), rgba(254, 243, 199, 0.9));
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            font-size: 31px;
            font-weight: 500;
            line-height: 1.2;
            color: #2d1b42;
            text-align: center;
            padding: 0 20px;
            box-shadow: inset 0 0 0 1px rgba(161, 125, 234, 0.35);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="avatar-wrap" aria-label="Profile avatar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAaedqwm7Zx9_NffjXW_6i4arLsC6mNsKPIt5FgP1drZ3wtr1LTSdUVNzf&s=10" alt="Avatar profile">
        </div>

        <div class="profile-info">
            <div class="info-box">{{ $nama }}</div>
            <div class="info-box">{{ $kelas }}</div>
            <div class="info-box">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>