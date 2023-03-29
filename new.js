let upCount = 0;
let downCount = 0;

function vote(voteType) {
  if (voteType === 'up') {
    upCount++;
    document.getElementById('up-count').innerHTML = upCount;
  } else if (voteType === 'down') {
    downCount++;
    document.getElementById('down-count').innerHTML = downCount;
  }
}
