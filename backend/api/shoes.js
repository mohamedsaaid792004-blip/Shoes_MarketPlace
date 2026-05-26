module.exports = (req, res) => {
  const data = [
    { id: 1, name: 'Classic Sneaker', description: 'Comfortable everyday sneaker', price: 59.99, image: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&q=80' },
    { id: 2, name: 'Running Pro', description: 'Lightweight running shoe', price: 89.99, image: 'https://images.unsplash.com/photo-1528701800489-476e03d1d3a8?w=800&q=80' }
  ]

  res.setHeader('Content-Type', 'application/json')
  res.status(200).send(JSON.stringify(data))
}
