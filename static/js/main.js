$('a[href="' + window.location.pathname + '"]').parent().addClass('active');


// Array.from(Array.from(document.querySelector('#post-4499 > div').childNodes).filter(node => node.tagName == "SECTION"))
// 	.map($place => {
// 		return Array.from($place.childNodes).filter(node => node.tagName == "SECTION")[0]
// 	})
// 		.forEach(($place, index1) => {
// 			const category = $place.getAttribute('id').slice(3)
// 			const places = Array.from($place.children)
// 				.filter(node => node.tagName == "ARTICLE")
// 			places
// 				.forEach((place, index2) => {
// 					const placeName = place.querySelector('.event-description h3').innerText.trim()
// 					const placeImage = place.querySelector('.inner-item a img').getAttribute('src')
// 					data.push({
// 						id: parseInt(index1.toString() + index2.toString()),
// 						category: category,
// 						name: placeName,
// 						mainImage: placeImage
// 					})
// 				})	
// 		})