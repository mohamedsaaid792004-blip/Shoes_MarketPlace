import { useState, useEffect } from 'react'
import axios from 'axios'
import './App.css'

function App() {
  const [shoes, setShoes] = useState([])
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)

  useEffect(() => {
    // Fetch shoes from Laravel API
    axios.get('/api/shoes')
      .then(response => {
        setShoes(response.data)
        setLoading(false)
      })
      .catch(err => {
        setError(err.message)
        setLoading(false)
      })
  }, [])

  if (loading) return <div className="container mt-5">Loading...</div>
  if (error) return <div className="container mt-5 alert alert-danger">Error: {error}</div>

  return (
    <div className="container mt-5">
      <h1 className="mb-4">Shoes Shop</h1>
      <div className="row">
        {shoes.length > 0 ? (
          shoes.map(shoe => (
            <div key={shoe.id} className="col-md-4 mb-4">
              <div className="card">
                {shoe.image && (
                  <img src={shoe.image} className="card-img-top" alt={shoe.name} />
                )}
                <div className="card-body">
                  <h5 className="card-title">{shoe.name}</h5>
                  <p className="card-text">{shoe.description}</p>
                  <p className="card-text">
                    <strong>${shoe.price}</strong>
                  </p>
                  <button className="btn btn-primary">Add to Cart</button>
                </div>
              </div>
            </div>
          ))
        ) : (
          <p>No shoes available</p>
        )}
      </div>
    </div>
  )
}

export default App
