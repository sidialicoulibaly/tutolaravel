<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter une catégorie</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 50%, #fbc2eb 100%);
    }

    form {
      width: 100%;
      max-width: 430px;
      padding: 40px 30px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(15px);
      border: 1.5px solid rgba(255, 255, 255, 0.4);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
      display: flex;
      flex-direction: column;
      gap: 14px;
      animation: fadeIn 0.8s ease;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.6rem;
      font-weight: 700;
      color: #374151;
    }

    label {
      font-weight: 600;
      font-size: 0.95rem;
      color: #374151;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 90%;
      padding: 12px 15px;
      border: none;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.7);
      font-size: 1rem;
      transition: 0.3s;
    }

    input:focus,
    textarea:focus {
      outline: none;
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 0 0 3px rgba(147, 197, 253, 0.6);
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button {
      background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 50%, #fad0c4 100%);
      color: #374151;
      border: none;
      border-radius: 12px;
      padding: 14px 0;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(255, 154, 158, 0.4);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <form action="{{ route('store') }}" method="POST">
    @csrf
    <h1>Ajouter une catégorie</h1>

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" >
    @error('name')
      <div style="color: #e53e3e; font-size: 0.95rem;">{{ $message }}</div>
    @enderror
    <label for="price">Prix</label>
    <input type="number" id="price" name="price" step="0.01" >
    @error('price')
      <div style="color: #e53e3e; font-size: 0.95rem;">{{ $message }}</div>
    @enderror
    <label for="description">Description</label>
    <textarea id="description" name="description" ></textarea>
      @error('description')
      <div style="color: #e53e3e; font-size: 0.95rem;">{{ $message }}</div>
    @enderror

    <button type="submit">Ajouter</button>
  </form>
</body>
</html>
