// Authorization token that must have been created previously. See : https://developer.spotify.com/documentation/web-api/concepts/authorization
const token =
  "BQDuPfI3SR9B8HrDtn27mdUQy8bCH85N06fRFhtIb7xbvLIkCrVOw63OAtRuBcnBNnJF63gpyAJQGd-KuIhLAMNv7xwfX9ncLSf088l9KDr8lAKduKJLi0gwNBDrHHJWETND3b_6tAZQkGqVmls5lNXlJeUnTGihE4fY83BxS4ci-BvWRLXxZt1J1rDd7oK48dD9pb1WS4-Lq44fefdOIT27EdU2spIfgZD26qjinpl5xxWSl5HtyBTEPv6ghjHK-qRHOwVeJ2Fi_V9L38jS63paU8nfDzxnCbu5weYqwgUh7G5FKnYNFBQ8bjyv301K";
async function fetchWebApi(endpoint, method, body) {
  const res = await fetch(`https://api.spotify.com/${endpoint}`, {
    headers: {
      Authorization: `Bearer ${token}`,
    },
    method,
    body: JSON.stringify(body),
  });
  return await res.json();
}

async function getTopTracks() {
  // Endpoint reference : https://developer.spotify.com/documentation/web-api/reference/get-users-top-artists-and-tracks
  return (
    await fetchWebApi("v1/me/top/tracks?time_range=long_term&limit=5", "GET")
  ).items;
}

const topTracks = await getTopTracks();
console.log(
  topTracks?.map(
    ({ name, artists }) =>
      `${name} by ${artists.map((artist) => artist.name).join(", ")}`
  )
);
