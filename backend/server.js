const express = require('express')
const shoesHandler = require('./api/shoes')

const app = express()
const port = process.env.PORT || 8000

app.use(express.json())
app.get('/api/shoes', shoesHandler)

app.listen(port, () => {
  console.log(`Backend API server listening at http://localhost:${port}`)
})
